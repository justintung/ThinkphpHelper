<?php
//	ThinkphpHelper v0.3
//	
//	生成表单代码
//
//	weiyunstudio.com
//	sjj zhuanqianfish@gmail.com
//	2014年9月18日
namespace app\tph2\Controller;
use Think\Controller;

class ViewCode extends Base {

    public function index(){
		$this->assign('db_prefix',C('database.prefix'));
		$tableNameList = getTableNameList();
		$this->assign('tableNameList', $tableNameList);
		$moduleNameList = getModuleNameList();
		$this->assign('moduleNameList', $moduleNameList);
		$themeList = getThemeList();
		$this->assign('themeList', $themeList);
		return $this->fetch('ViewCode/index');
    }
	
	//一键生成表单文件
	public function generateAllView(){
		$tableName = I('tableName');
		$formController = I('formController');
		$defaultActionList = ['add','edit','getList'];
		$msg = '';
		foreach($defaultActionList as $acton){
			$msg .= $this->createViewFile($acton).'<br>';
		}
		return $msg;
	}

	//生成前台布局文件
	public function generateViewLayout(){
		$moduleName = I('moduleName');
		$theme = I('theme');//代码风格
		$layoutListStr = I('layoutList');
		$layoutList = explode(',', $layoutListStr);
		$modelPath = TARGET_PROJECT_PATH.$moduleName.DS.'/view/';
		if(!file_exists($modelPath)){
			FileUtil::createDir($modelPath);			
		}
		$this->assign('moduleName', $moduleName);
		$templateBasePath = CODE_REPOSITORY.DS. $theme ."/view/";
		$res = '';
		foreach($layoutList as $layoutName){
			$template = file_get_contents($templateBasePath . $layoutName. '.html');//读取模板
			$resCode =  $this->display($template,[],[],['view_path'=>C('codeLib').'/View/']);
			$filePath = $modelPath.$layoutName.".html";
			file_put_contents($filePath, $resCode);
			$res .= '生成成功，生成路径为：'.$filePath.'<br>';
		}
		return $res;
	}


	//生成视图代码
	public function generateViewCode($actionName = null){
		$tableName = getTableName(I('tableName'));
		$moduleName = I('moduleName');
		$controllerName = I('controllerName');
		$tableInfoArray = getTableInfoArray(I('tableName'));
		
		
		$columnNameKey = getColumnNameKey();
		$this->assign('tableName', $tableName);
		$this->assign('controllerName', $controllerName);
		$this->assign('moduleName', $moduleName);
		$this->assign('tableInfoArray', $tableInfoArray);
		$this->assign('columnNameKey', $columnNameKey);

		$theme = I('theme');//代码风格
		$actionName = $actionName ? $actionName : I('actionName');
		$templateBasePath = CODE_REPOSITORY.DS. $theme ."/view/";	//代码所在文件夹
		$template = file_get_contents($templateBasePath . $actionName. '.html');	//读取模板
		$resCode =  $this->display($template,[],[],['view_path'=>C('codeLib').'/View/']);
		return $resCode;
	}

	//生成视图文件
	public function createViewFile($actionName = null){
		$moduleName = I('moduleName');
		$tableName = getTableName(I('tableName'));
		$modelPath = TARGET_PROJECT_PATH.$moduleName.DS.'/view/';
		if(!file_exists($modelPath)){
			FileUtil::createDir($modelPath);			
		}
		if(!file_exists($modelPath.DS. $tableName.DS)){
			FileUtil::createDir($modelPath.DS.$tableName.DS);
		}
		$actionName = $actionName ? $actionName : I('actionName');		
		$code = $this->generateViewCode($actionName);
		$filePath = $modelPath. $tableName .DS. $actionName.".html";
		file_put_contents($filePath, $code);
		return '生成成功，生成路径为：'.$filePath;
	}

	//加载表字段，返回select选项
	public function loadField(){
		$tableName = I('tableName');
		$tableInfoArray = getTableInfoArray($tableName);
		$columnNameKey = getColumnNameKey();
		$str = '';
		foreach($tableInfoArray as $tableInfo){
			$str .= '<option value="'.$tableInfo[$columnNameKey].'" >'.$tableInfo[$columnNameKey]."</option>\r\n";
		}
		echo $str;
	}
}
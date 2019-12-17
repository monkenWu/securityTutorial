<?php namespace App\Controllers;

class Course extends BaseController{

    private $course = [
        "security"    =>"資訊安全概論",
        "design"      =>"安全軟體設計概論",
        "programming" =>"安全程式設計概論",
        "web"         =>"安全網頁程式設計",
        "cloud"       =>"安全雲端程式設計",
        "testing"     =>"軟體安全測試"
    ];

    public function _remap($class=""){
        
        if($class == "index"){
            return $this->normal();
        }else if(array_key_exists($class,$this->course) && func_num_args()==1){
            return $this->getCourse($class,$this->course[$class]);
        }else if(array_key_exists($class,$this->course) && func_num_args() > 1){
            return $this->getCourseChild($class,$this->course[$class],func_get_args());
        }else{
            return redirect()->to(base_url("Course"));
        }
        //print_r($child);
    }

	protected  function normal(){
        return $this->getView([
            "pageName" => "課程選擇",
            "viewName" => "course"
        ]);
    }

    protected  function getCourse($viewName,$pageName){
        return $this->getView([
            "pageName" => $pageName,
            "viewName" => $viewName,
            "isChild" => false
        ]);
    }

    protected  function getCourseChild($viewName,$pageName,$child){
        $childPath = "" ;
        foreach ($child as $key => $value) {
           if($key!=0){
                $childPath .= "/{$value}";
           }
        }
        try {
            view("{$viewName}{$childPath}/index");
        } catch (\Exception $th) {
            if(preg_match("/Invalid file/i",$th->getMessage())){
                return redirect()->to(base_url("course/{$viewName}"));
                exit();
            }
        }
        return $this->getView([
            "pageName" => $pageName,
            "viewName" => $viewName,
            "isChild" => true,
            "childPath" => $childPath
        ]);
    }

}

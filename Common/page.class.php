<?php

class Page{
    private $everyNum;//每页显示的条数
    private $sum;//总条数
    private $currentPage;//当前页面
    private $pageSum;//总页数
    private $pageArray;//构造分页的数组
    private $link;//每个分页的链接；
    private $subPages;//每次显示的页数
    function __construct($everyNum,$sum,$currentPage,$subPages,$link){
        $this->everyNum=intval($everyNum);
        $this->sum=$sum;
        if (!$currentPage){
            $this->currentPage=1;
        }else{
            $this->currentPage=intval($currentPage);
        }
        $this->subPages=$subPages;
        $this->pageSum=ceil($sum/$everyNum);
        $this->link=$link;
    }

    //给建立分页的数组初始化的函数
    function initArray(){
        for ($i=0;$i<$this->subPages;$i++){
            $this->pageArray[$i]=$i;
        }
        return $this->pageArray;
    }

    //构造显示的条目
    function constructPage(){
        if ($this->pageSum<$this->subPages){
            $currentArray=array();
            for ($i=0;$i<$this->pageSum;$i++){
                $currentArray[$i]=$i+1;
            }
        }else{
            $currentArray=$this->initArray();
            if ($this->currentPage<floor($this->subPages/2+1)){
                for ($i=0;$i<count($currentArray);$i++){
                    $currentArray[$i]=$i+1;
                }
            }
            if ($this->currentPage<=$this->pageSum&&$this->currentPage>$this->pageSum-$this->subPages+1) {//最后的几页
                for ($i=0;$i<count($currentArray);$i++){
                    $currentArray[$i]=$i+$this->pageSum-$this->subPages+1;
                }
            }else{
                for ($i=0;$i<count($currentArray);$i++){
                    $currentArray[$i]=$this->currentPage-2+$i;
                }
            }
        }
        $this->pageArray=$currentArray;
    }

    //显示分页
    function show(){
        $str='<div class="paginate">';
        $str.='当前第'.$this->currentPage.'/'.$this->pageSum.'页&nbsp;';
        if ($this->currentPage>1){
            $firstPageUrl=$this->link.'/?page=1';
            $prePageUrl=$this->link.'/?page='.($this->currentPage-1);
            $str.='[<a href="'.$firstPageUrl.'">首页</a>]&nbsp;';
            $str.='[<a href="'.$prePageUrl.'">上一页</a>]&nbsp;';
        }else{
            $str.='[首页]&nbsp;';
            $str.='[上一页]&nbsp;';
        }
        $this->constructPage();
        $pages=$this->pageArray;
        for ($i=0;$i<count($pages);$i++){
            $page=$pages[$i];
            if ($this->currentPage==$page){
                $str.='<span style="color: black;font-weight: bold">'.$page.'</span>&nbsp;';
            }else{
                $str.='<a href="'.$this->link.'/?page='.$page.'" style="color:#CC0000;">'.$page.'</a>&nbsp;';
            }
        }
        if($this->currentPage<$this->pageSum){
            $lastPageUrl=$this->link.'/?page='.$this->pageSum;
            $nextPageUrl=$this->link.'/?page='.($this->currentPage+1);
            $str.=" [<a href='$nextPageUrl'>下一页</a>]&nbsp;";
            $str.="[<a href='$lastPageUrl'>尾页</a>]&nbsp;";
        }else{
            $str.='[下一页]&nbsp;';
            $str.='[尾页]&nbsp;';
        }
        $str.='</div>';
        return $str;
    }

    function __destruct(){
        unset($this->everyNum);
        unset($this->sum);
        unset($this->currentPage);
        unset($this->pageSum);
        unset($this->pageArray);
        unset($this->link);
        unset($this->subPages);
    }
}
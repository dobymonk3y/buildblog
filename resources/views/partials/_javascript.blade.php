<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
    //5秒后自动调用 alerthidden
    window.onload=setTimeout( "alerthidden()" , 5000 );
    function alerthidden() {
        if(document.getElementById("addPostSuccess")){
            document.getElementById("addPostSuccess").style.display ="none";
        }
        if(document.getElementById("deletePostSuccess")){
            document.getElementById("deletePostSuccess").style.display ="none";
        }
        if(document.getElementById("addCategorySuccess")){
            document.getElementById("addCategorySuccess").style.display ="none";
        }
        if(document.getElementById("addCategoryFaild")){
            document.getElementById("addCategoryFaild").style.display ="none";
        }
        if(document.getElementById("tagaddsuccess")){
            document.getElementById("tagaddsuccess").style.display ="none";
        }
    }
</script>
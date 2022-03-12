<div class="col-3 mt-5">
        <form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">
        
        <div class='custom-file mx-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案：</label>
            <input class="custom-file-input" type="file" name="name" id="upload">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
            <input class='form-control' type="text" name="intro" id="intro">
        </div>
        <div class="mx-auto mb-2">
            <input type="submit" value="上傳" class="btn btn-primary">
        </div>
    </form>  
    <table class="table ml-5 m-auto  " style="width: 600px;">
        <div class="col-">
  
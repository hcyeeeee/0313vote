
<!-- // 要如何加一個問題就增加一個表？？？？？



// echo"666";
// 裡面要用單引號
// $vote=all('topics');
// $topic=array($vote as $key => $value);
// dd($vote);
// find('topic')
// $key=find('topics','1');
// $value=print_r($key);
// dd($key);

// $key = find('topics', '1');
// $value = print_r($key['topic']);

$div= -->




<div class="container d-flex justify-content-around">
    <!-- 問題一   -->
    <div class="row ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/IMG_9232.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <? $key = find('topics', '1');
                       $value = print_r($key['topic']);
                       $value?>
                </h5>

                <p class="card-text">77777</p>
               <a href='index.php?do=vote'><input  class="btn btn-info" type="button" value="看結果"></input></a>
                <input action="../front/vote_result.php" class="btn btn-info" type="button" value="看結果"></input>
            </div>
        </div>
    </div>

    <!-- 問題二 -->
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/IMG_9232.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <? $key = find('topics', '2');
                       $value = print_r($key['topic']);
                       $value?>

                </h5>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>


                <!-- 怎麼按到別業。。。 -->
                <form action="../front/vote.php" method="post">
                    <input class="btn btn-info" type="button" value="投票"></input>
                    <input class="btn btn-info" type="button" value="看結果"></input>
                </form>
            </div>
        </div>
    </div>

<!-- 問題3 -->
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/IMG_9232.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <? $key = find('topics', '3');
                       $value = print_r($key['topic']);
                       $value?>

                </h5>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>


                <!-- 怎麼按到別業。。。 -->
                <form action="../front/vote.php" method="post">
                    <input class="btn btn-info" type="button" value="投票"></input>
                    <input class="btn btn-info" type="button" value="看結果"></input>
                </form>
            </div>
        </div>
    </div>

    <!-- 問題4 -->
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/IMG_9232.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <? $key = find('topics', '5');
                       $value = print_r($key['topic']);
                       $value?>

                </h5>

                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>


                <!-- 怎麼按到別業。。。 -->
                <form action="../front/vote.php" method="post">
                    <input class="btn btn-info" type="button" value="投票"></input>
                    <input class="btn btn-info" type="button" value="看結果"></input>
                </form>
            </div>
        </div>
    </div>





</div>
<?php
$question = array("question"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
$answers = array(
                  1=>array(
                            "seq"=>1,"text"=>"one","correct"=>true
                          ),
                  2=>array(
                            "seq"=>2,"text"=>"two","correct"=>false
                          ),
                  3=>array(
                            "seq"=>3,"text"=>"three","correct"=>true
                          ),
                )
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width">
    <script src=""></script>
    <link rel="stylesheet" type="text/css" href="">
    <style>
    div {
      width:75%;
      margin: auto;
    }
    ul {list-style-type: none;}
    li {padding-bottom: 5px;}
    </style>
</head>
<body>
<div id="question">
<?php echo $question['question'];?>
</div>
<div id="answer">
<ul>
  <?php foreach($answers as $answer) { ?>
  <li><input type="checkbox" id="answer<?php echo $answer['seq'];?> name="answer<?php echo $answer['seq'];?>" /><?php echo $answer['text'];?></li>
<?php } // answers ?>

</ul>
</div>

</body>
</html>

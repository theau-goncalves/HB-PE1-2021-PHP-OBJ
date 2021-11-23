<?php
session_start();
$_SESSION['coucou'] = 'titi';
include '../functions.php';

include 'User.php';
include 'Student.php';
include 'Teacher.php';
include 'Post.php';

$me = new User('Théau', 'Goncalves', 25, 'theau@drosalys.fr', 'male');
$me->setAge(25);
//echo $me;
//dump($me);

//Post class

$objectPhpPost = new Post(
    'Les objets en php',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, asperiores consequatur corporis cupiditate deleniti dolorem eaque exercitationem expedita facere fugit iste laborum maxime nam necessitatibus numquam qui quos reiciendis, sed, sint tenetur unde veritatis voluptate. Commodi harum numquam officia repellat voluptatibus? A accusamus autem cupiditate distinctio dolorem, doloremque doloribus earum excepturi ipsam iure laboriosam laborum magnam magni modi molestias nam natus nisi odio quas quasi, ratione recusandae repellat sapiente similique sint tempora temporibus veniam vero vitae voluptatibus. At dolorum eaque fugiat nobis numquam. Amet consequatur esse nisi numquam sapiente. Accusantium alias architecto assumenda rerum ullam! Atque deleniti quis vero voluptas!',
    new DateTime('2021-11-10 11:57'),
    'Théau Goncalves'
);


?>

<h1 style="text-align: center">
    <?php echo $objectPhpPost; ?>
</h1>

<div style="text-align: center; margin-bottom: 3rem">
    <?php echo $objectPhpPost->getAuthor() . ' - ' . $objectPhpPost->getReadableCreateAt(); ?>
</div>

<div class="content">
    <?php echo $objectPhpPost->getContent(); ?>
</div>

<hr>

<?php
$student = new Student(
    'Alexis',
    'Goncalves',
    28,
    'alexis@drosalys.fr',
    'male',
    'Pole Emploi',
    [
        'BREVET',
        'BAC STI2D',
        'PERMIS B',
        'PERMIS A2',
        'PERMIS A',
    ]
);

$student->addDegree('ASSR2');
$student->removeDegree('PERMIS A2');
dump($student);

echo '<hr>';

$theau = new Teacher(
    'Théau',
    'Goncalves',
    25,
    'theau@drosalys.fr',
    [
        'PHP' => 5,
        'Docker' => 2,
        'Java' => 1,
        'PHP Storm' => 2,
        'Html' => 5
    ],
    $student,
    'male'
);


$theau->addLessonSubject('SCSS', 5);
$theau->removeLessonSubject('Java');
dump($theau->getAvgLessonCapacity());
?>

<ul>
    <?php foreach ($theau->getLessonSubjects() as $lessonSubject => $lvl): ?>
        <li>
            <?php echo $lessonSubject . ' : ' . $lvl ?>
        </li>
    <?php endforeach; ?>
</ul>





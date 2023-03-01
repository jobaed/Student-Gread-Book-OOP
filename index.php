<?php

require_once 'students.php';
require_once 'course.php';
require_once 'greadebook.php';

// Student Add
$student1 = new Student('0001', 'Jobaed Bhuiyan');
$student2 = new Student('0002', 'Arifur Rahman');
$student3 = new Student('0003', 'Rayhan AHmed');
$student4 = new Student('0004', 'Tania Akther');

// Course 1
$course1 = new Course('C001', 'Math');
$course1->addStudent($student1);
$course1->addStudent($student2);
$course1->addStudent($student3);
$course1->addStudent($student4);

// Grate add For Course 1
$course1->addGreads('0001', 80);
$course1->addGreads('0002', 85);
$course1->addGreads('0003', 98);
$course1->addGreads('0004', 95);

// Course 2
$course2 = new Course('C002', 'Physics');
$course2->addStudent($student1);
$course2->addStudent($student2);
$course2->addStudent($student3);
$course2->addStudent($student4);

// Grate add For Course 2
$course2->addGreads('0001', 80);
$course2->addGreads('0002', 75);
$course2->addGreads('0003', 98);
$course2->addGreads('0004', 65);

// Course 3
$course3 = new Course('C003', 'English');
$course3->addStudent($student1);
$course3->addStudent($student2);
$course3->addStudent($student3);
$course3->addStudent($student4);

// Grate add For Course 3
$course3->addGreads('0001', 90);
$course3->addGreads('0002', 95);
$course3->addGreads('0003', 88);
$course3->addGreads('0004', 85);

// Graad Book
$greadbook = new Gradebook();
$greadbook->addCourse($course1);
$greadbook->addCourse($course2);
$greadbook->addCourse($course3);



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="p-5">
            <h1 class="text-center">
                Student Gradebook
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/L</th>
                        <th scope="col">Student</th>
                        <th scope="col">Course</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $sl = 1;
                    foreach ($greadbook->getCourses() as $course) : ?>
                        <?php foreach ($course->getStudents() as $student) : ?>
                            <tr>
                                <td><?php echo $sl ?></td>
                                <td><?php echo $student->getName(); ?></td>
                                <td><?php echo $course->getName(); ?></td>
                                <td><?php echo $course->getGread($student->getId()); ?></td>
                            </tr>
                        <?php $sl++; endforeach; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
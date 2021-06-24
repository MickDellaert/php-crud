<?php
declare(strict_types=1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        $classLoader = new ClassesLoader();
        $classes = $classLoader->getClasses();

        //load the view
        require 'View/teachers.php';
    }
}
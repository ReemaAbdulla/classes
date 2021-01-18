<?php
class student{
	var $studentName="mona";
	var $age="40";
	var $gender="female";
	var $mobile="0775896432";

function welcomStudent($studentName)
{
	return "welcom to our school $studentName";
}

function getGender()
{
	return $this->gender;
}

function setAge($age)
{
	if ($age>=18)
	{
		return "you are not allowed to register";
	}
	else{
		return welcomStuden($name);
	}
}

}

$x = new student();
echo $x->welcomStudent("noor");
echo"<br>";
$y= new student();
echo $y->getGender();
echo "<br>";
$z = new student();
echo $z->setAge("25");



?>
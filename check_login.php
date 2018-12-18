<?php

      if ($_POST['username'] == 'nisit' && $_POST['password'] == '1234') {
          header('Location: nisit.php');
      } elseif ($_POST['username'] == 'user1' && $_POST['password'] == '1234') {
          header('Location: /../Teacher/home_teacher.php'); //อาจารย์ที่ปรึกษา
      } elseif ($_POST['username'] == 'user2' && $_POST['password'] == '1234') {
          header('Location: ../../Teacher/home_headDepartment.php'); //หัวหน้าภาค
      } elseif ($_POST['username'] == 'user3' && $_POST['password'] == '1234') {
          header('Location: ../../Teacher/home_dean.php'); //คณบดี
      } elseif ($_POST['username'] == 'admin' && $_POST['password'] == '1234') {
          header('Location: ../../admin/home_admin.php'); //คณบดี
      }

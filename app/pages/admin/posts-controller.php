<?php

    //add new user
    if($action == 'add'){

      if(!empty($_POST)){
        //validate
        $errors = [];
    
        if(empty($_POST['title'])){
    
            $errors['title'] = "Title is required";
    
        }

        if(empty($_POST['content'])){
    
          $errors['content'] = "Content is required";
  
        }
    
        if(empty($_POST['category_id'])){
    
            $errors['category_id'] = "Category is required";
    
        }
    
        //validate image
        $allowed = ['image/jpeg','image/png','image/webp'];
        if(!empty($_FILES['image']['name']))
        {
          $destination = "";
          if(!in_array($_FILES['image']['type'], $allowed))
          {
            $errors['image'] = "Image format not supported";
          }else
          {
            $folder = "uploads/";
            if(!file_exists($folder))
            {
              mkdir($folder, 0777, true);
            }

            $destination = $folder . time() . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            resize_image($destination);
          
          }

        } else {
            $errors['image'] = "A featured image is required";
        }

        $slug = str_to_url($_POST['title']);

        $query = "select id from posts where slug = :slug limit 1";
        $slug_row = query($query, ['slug' => $slug]);

        if ($slug_row) {
            $slug .= rand(1000, 9999);
        }

        $new_content = remove_images_from_content($_POST['content']);
        $new_content = remove_root_from_content($new_content);
    
        if(empty($errors))
          {
            //save to database
            $data = [];
            $data['creator']    = user('username');
            $data['title']      = $_POST['title'];
            $data['content']    = $new_content;
            $data['category_id']= $_POST['category_id'];
            $data['slug']       = $slug;
            $data['slugid']     = $slug;
            $data['user_id']    = user('id');
            $data['status']     = "Approved";
            

            $query = "insert into posts (creator,title,content,slug,slugid,category_id,user_id,status) values (:creator,:title,:content,:slug,:slugid,:category_id,:user_id,:status)";
            
            if(!empty($destination))
            {
              $data['image']     = $destination;
              $query = "insert into posts (creator,title,content,slug,slugid,category_id,user_id,image,status) values (:creator,:title,:content,:slug,:slugid,:category_id,:user_id,:image,:status)";
            }

            query($query, $data);

            redirect('admin/posts');

          }
      }
  
    }else
    if($action == 'edit'){

      $query = "select * from posts where id = :id limit 1";
      $row = query_row($query, ['id'=>$id]);

      if(!empty($_POST)){

        if($row){

          //validate
          $errors = [];
      
        if(empty($_POST['title'])){
    
          $errors['title'] = "A title is required";
    
        }

        if(empty($_POST['content'])){
    
          $errors['content'] = "Content is required";
  
        }
    
        if(empty($_POST['category_id'])){
    
            $errors['category_id'] = "A category is required";
    
        }
    
        //validate image
        $allowed = ['image/jpeg','image/png','image/webp'];
        if(!empty($_FILES['image']['name']))
        {
          $destination = "";
          if(!in_array($_FILES['image']['type'], $allowed))
          {
            $errors['image'] = "Image format not supported";
          }else
          {
            $folder = "uploads/";
            if(!file_exists($folder))
            {
              mkdir($folder, 0777, true);
            }

            $destination = $folder . time() . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            resize_image($destination);
          
          }

        }
        
      
          if(empty($errors)){

            $slug = str_to_url($_POST['title']);

            $query = "select id from posts where slug = :slug limit 1";
            $slug_row = query($query, ['slug' => $slug]);

            if ($slug_row) {
                $slug .= rand(1000, 9999);
            }

            $new_content = remove_images_from_content($_POST['content']);
            $new_content = remove_root_from_content($new_content);

              //save to database
              $data = [];
              $data['title']      = $_POST['title'];
              $data['content']    = $new_content;
              $data['category_id']= $_POST['category_id'];
              $data['id']         = $id;
              $data['slug']       = $slug;
              $data['status']     = $_POST['status_id'];

              $image_str        = "";

                if(!empty($destination))
                {
                  $image_str = "image = :image, ";
                  $data['image']       = $destination;
                }
              
                $query = "update posts set title = :title, status = :status, content = :content, slug = :slug, $image_str category_id = :category_id where id = :id limit 1";


              query($query, $data);
              redirect('admin/posts');

            }
      }
    }
  
    }
    else
    if($action == 'delete'){

      $query = "select * from posts where id = :id limit 1";
      $row = query_row($query, ['id'=>$id]);

      if($_SERVER['REQUEST_METHOD'] == "POST"){

        if($row){

          //validate
          $errors = [];
      
          if(empty($errors)){
              //delete from database
              $data = [];
              $data['id'] = $id;

              $query = "delete from posts where id = :id limit 1";


              query($query, $data);

              if(file_exists($row['image']))
                unlink($row['image']);

              redirect('admin/posts');
          }
      }
    }
  
}
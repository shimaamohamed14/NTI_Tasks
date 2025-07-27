<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <?php
        include "../navbar.php";

    ?>
    <div class="container">

        <h3 class=" mb-5  text-center">Courses</h3>
        <div class="row" id="courses"> </div>



        <div class="row">
            <div class="col-md-8">
                <h4>Add New Course</h4>
                <form id="addCourse">
                    <input type="text" class="form-control mb-3" placeholder="Course Title"
                        name="title" required>
                    <input type="text" class="form-control mb-3"  placeholder="Description"
                        name="description" required>
                    <input type="Number" class="form-control mb-3" placeholder="Hours"
                        name="hours" required>
                    <input type="Number" class="form-control mb-3"  placeholder="Price"
                        name="price" required>

                    <button type="submit" class="btn btn-info">Add Course</button>
                </form>
            </div>
            <hr/>
        </div>
        <div class="row my-5">
            <div class="col-md-8">
                <h4>Edit Course</h4>
        <select id="put-options" onchange="read(this.value)" name="id" class="w-100 mb-3">
                    </select>
                <form id="editCourse">
                   
                    <div class="selected" id="selected"></div>

                        <input type="number" class="form-control mb-3" readonly 
                            required name="id">
                        <input type="text" class="form-control mb-3" 
                            placeholder="New Title" name="title">
                        <input type="text" class="form-control mb-3" 
                            placeholder="New Description" name="description">
                        <input type="Number" class="form-control mb-3" 
                            placeholder="New Hours" name="hours">
                        <input type="Number" class="form-control mb-3" 
                            placeholder="New Price" name="price">

                        <button type="submit" class="btn btn-info">Update Course</button>
                </form>
        </div>
    </div>
    </div>
    <script>

        function read( id = '') {
            fetch("http://localhost/Day10/Project/training_system/courses/courses_api/get.php" + (id == '' ? '' : '?id=' + id))
                .then(res => res.json())
                .then(data => {
                    let html = "";
                    let options = `<option value="" >Select Course Title</option>`;
                    let inputs;
                

                    data.forEach(course => {
                        html += `
                    <div class="col-md-3 mb-5 d-flex justify-content-center">
                    <div class="card shadow p-3 w-100 bg-dark text-light" ">
                  <h5 class="card-header bg-info text-light mb-3">${course.title}</h5>
                     <p>Description: ${course.description}</p>
                  <p class="card-text">Hours: ${course.hours}</p>
                   <p class="card-text">Price: ${course.price}</p>
           </div>
      </div>`;
    
 
                        options += `<option value="${course.id}">${course.title} </option>`;
                        if (id != '') {
                            inputs = data;
                            console.log("inputs", inputs)
                        }
                    });
                    if (id != '') {
                        form = document.getElementById("editCourse");
                        form.querySelector("#selected").innerHTML = "<hr/> selected element is : <strong>" + inputs[0].title + "</strong> <hr/> please edit what you want and leave the rest";
                        form.querySelector("#selected").classList.add("my-4");
                        form.querySelector('input[name="id"]').value = inputs[0].id;
                        form.querySelector('input[name="title"]').value = inputs[0].title;
                        form.querySelector('input[name="description"]').value = inputs[0].description;
                        form.querySelector('input[name="hours"]').value = inputs[0].hours;
                        form.querySelector('input[name="price"]').value = inputs[0].price;
                    }
                    else {

                        document.getElementById("courses").innerHTML = html;
                        document.getElementById("put-options").innerHTML = options;

                    }


                })
        }
        read();
    </script>
    <script>
     document.getElementById("editCourse").addEventListener("submit",function (e){
        e.preventDefault() ;
        const form = e.target ;
        const data ={
            id: form.id.value ,
            title: form.title.value ,
            description: form.description.value ,
            hours: form.hours.value ,
            price: form.price.value ,
        } ;
    fetch("http://localhost/Day10/Project/training_system/courses/courses_api/put.php" ,{
        method:"PUT" ,
        headers:{"Content-Type":"application/json"

        },
        body: JSON.stringify(data)

    }  ) 
    .then(res=>res.json())
    .then(res =>  {
        alert(res.status) ;
        console.log(res) ;
        read() ;
     } ) ;
    }) ;
    </script>
    <script>
        document.getElementById("addCourse").addEventListener("submit",function(e){
           e.preventDefault() ;
            const form=e.target ;
            const data ={
                title:form.title.value ,
                description: form.description.value ,
                hours: form.hours.value ,
                price: form.price.value ,
            } ;
            fetch("http://localhost/Day10/Project/training_system/courses/courses_api/post.php" ,{
            method:"POST" ,
            headers:{"Content-Type":"application/json"  },
            body:JSON.stringify (data)         }  )
          .then(res=>res.json())
    .then(res =>  {
        alert(res.status) ;
        console.log(res) ;
        read() ;
     } ) ;
    }) ;
    </script>
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

</body>

</html>
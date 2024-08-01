<link rel="stylesheet" href="css/bootsrap.css">
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Сотрудники</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=2"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Имя</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Фамилия</label>
                    <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">День рождения</label>
                    <input type="date" name="birthday" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <label for="">Пол</label>
                  <select name="gender" id="">
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                  </select>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Должность</label>
                    <input type="text"  class="form-control" id="exampleInputPassword1" name="position">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Изображение</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"  name="save" class="btn btn-primary">Submit</button>
                </div>
                
              </form>
              
            </div>
            <!-- /.card -->
 
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
 </div>
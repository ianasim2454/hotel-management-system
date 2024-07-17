<!DOCTYPE html>
<html>
  <head> 
  @include('admin.components.css')

  <style type="text/css">
      label{
            display: inline-block;
            width: 230px;
            font-size: 20px !important;
            color: white !important;
            font-style: italic;
        }
        input[type='text']
        {
            width: 250px;
            height: 50px;
        }

        textarea{
            width: 350px;
            height: 50px;
        }

    .div_deg{
        padding:5px;
    }
    .main{
        display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
    }
    .button{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

  </style>
  </head>
  <body>
  @include('admin.components.header')
  @include('admin.components.sidebar')
  <div class="page-content">
  <div class="page-header">
  <div class="container-fluid">

    <div class="headline">
        <h1 class="h2 text-center text-white font-italic">Create Room</h1>
    </div>

    <div class="main">
    <form action="{{route('upload.room')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="div_deg">
                <label for="">Room Title</label>
                <input type="text" name="title">
            </div>

            <div class="div_deg">
                <label for="">Description</label>
                <textarea  name="description" id="" cols="" rows=""></textarea>
            </div>

            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price">
            </div>

            <div class="div_deg">
                <label for="">Room Type</label>
                <select name="type" id="">
                    <!-- <option value="">Select A Option</option> -->
                    <option selected value="regular">Regular</option>
                    <option value="premium">Premium</option>
                    <option value="deluxe">Deluxe</option>
                </select>
            </div>

            <div class="div_deg">
                <label for="">Wifi</label>
                <select name="wifi" id="">
                    <option selected value="yes">Yes</option>
                    <option value="no">No</option>
                   
                </select>
            </div>

            <div class="div_deg">
                <label for="">Upload Image</label>
                <input type="file" name="img">
            </div>

            <div class="button">
                <input class="btn btn-success" type="submit" value="ADD">
            </div>
        </form>
    </div>




  </div>
  </div>
  </div>
  @include('admin.components.footer')
  </body>
</html>
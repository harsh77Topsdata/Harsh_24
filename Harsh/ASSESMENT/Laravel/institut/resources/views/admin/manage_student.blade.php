@extends('admin.layout.main')

@section('contant')


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Student</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Student</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Student</h5>
                <h1>Students For Any Query</h1>
            </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>gen</th>
                        <th>lang</th>
                        <th>image</th>
                        <th>Action</th>
                     </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td><?php echo $d->id;?></td>
                            <td><?php echo $d->name;?></td>
                            <td><?php echo $d->email;?></td>
                            <td><?php echo $d->gen;?></td>
                            <td><?php echo $d->lang;?></td>
                            <td><img src="{{ url('website/upload/users/'.$d->image)}}" style="width:50px;object-fit: cover;"></td>
                            <td>
                                <a href="edit_student" class="btn btn-primary">Edit</a>
                                <a href="{{url('manage_student/'.$d->id)}}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
            
    </div>
    </div>
   
@endsection
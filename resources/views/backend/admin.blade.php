<style>
    .bg-aqua{
        background: #00c0ef !important;
    }
    .bg-green{
        background: #00a65a !important;
    }
    .bg-yellow{
        background: #f39c12 !important;
    }
    .bg-red{
        background: #dd4b39 !important
    }
    .small-box{
        color: white;
    }

</style>
@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <?php
            $users = \App\User::get();
            foreach ($users as $user){
                echo $user->name.'<br>';
                echo $user->role.'<br>';
                echo $user->email.'<br><br>';
            }

        ?>
    </div>
@endsection

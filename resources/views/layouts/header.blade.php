{{--Header--}}
<style>
    .navbar-brand {
        transition: transform 0.3s ease; /* Плавный переход для свойства transform */
    }

    .navbar-brand:hover {
        transform: scale(1.3); /* Увеличение размера при наведении */
    }
</style>
<nav class="navbar navbar-dark bg-dark p-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a href="{{route('index')}}" class="navbar-brand mb-0 h1">Home 🍔</a>
        <a class="btn btn-outline-success btn-lg mx-auto" href="{{route('add-task')}}">Create new task</a>
    </div>
</nav>





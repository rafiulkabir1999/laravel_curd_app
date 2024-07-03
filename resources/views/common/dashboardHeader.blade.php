<div class="position-fixed mb-3 bg-light" style="min-height: 100vh;width:300px">
<div class="mt-3 border m-3 border-secondary d-flex align-items-center justify-content-center">
    <p class="m-0 p-2   text-secondary text-center fw-bold fs-3 text-wrap ">
        <a href="/" class="text-decoration-none">
            Laravel CURD APP</a>
    </p>

</div>
    <p class="pb-4 text-secondary text-center fw-semibold fs-4">Dashboard</p>
    
    
    
    <div class=" mx-3">
    <ul class="list p-0">
        <li class="list-group-item d-flex justify-content-between">
           <a href="/showrooms" class="text-decoration-none">
            <p class="m-0 p-0 "> Showroom</p></a>
           <span onclick="handlemenu()" class="cursor-pointer text-center bg-secondary bg-primary-hover p-1 rounded-circle text-white" style="width:30px;height:30px">+</span>
        </li>
    </ul>

    {{-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div> --}}
</div>
</div>

<script>
    handlemenu(){
        alert('nahid ul kabir');
    }
</script>

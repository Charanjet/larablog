<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
    <h3 class="h3">Welcome ,
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">{{ $user->name }}</span>
    </h3>

    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
            </a>
        </li>
        <li>
            <a href="/posts/view/{{ $user->id }}" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Posts
            </a>
        </li>
    </ul>
</div>
<h3 class="mb-4 font-bold text-xl">Friends</h3>
<ul>
    @foreach (range(1, 8) as $index)
        
    <li class="mb-2">
        <div class="flex items-center text-sm">
            <img src="/images/user.svg" alt="profile" class="rounded-full mr-2" width="32px">
            John Doe
        </div>
    </li>
    @endforeach
</ul>
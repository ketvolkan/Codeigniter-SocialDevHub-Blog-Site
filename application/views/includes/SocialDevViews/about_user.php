<div class="mx-auto text-center text-white column mb-2">
    <h2 class="page-section-heading"><?php echo $user->name; ?></h2>
    <div class="mx-5">
        <p class="text-center"><?php echo $user->status; ?></p>
    </div>
    <a class="btn-xl mx-5" style="color: #1B1A17;" target="blank"
        href="https://github.com/<?php echo $user->github; ?>">
        <i class="fab fa-github"></i>
        GitHub
    </a>
</div>
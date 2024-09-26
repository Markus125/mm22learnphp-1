<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <form method="POST" action="/admin/posts">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>
<?= view('partials/head') ?>

<form method="post" action="/tasks">
    <label>Description: </label>
    <input name="description">
    <label>Completed: </label>
    <input name="completed">
    <button type="submit">Add</button>
</form>

<?= view('partials/footer') ?>
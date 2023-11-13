<li class="list-group-item d-flex flex-row justify-content-between align-items-center">
    <b><?= $val['task'] . ' ' . $val['deadline'] ?></b>
    <div>
        <a href='/сomplete.php?id=<?= $val['id'] ?>' class="text-decoration-none">
            <button type="button" class="btn btn-info">Complete</button>
        </a>
        <a href='/delete.php?id=<?= $val['id'] ?>' class="text-decoration-none">
            <button type="button" class="btn btn-secondary">Delete</button>
        </a>
    </div>
</li>
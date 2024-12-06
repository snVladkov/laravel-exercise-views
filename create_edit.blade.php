<div class="container-fluid">
    <div class="row mx-0 mx-md-5 contacts-section">
        <h2 class="col-12 mb-3">Добави продукт</h2>
        <form id="contact-form" class="col-12 row" action="" method="">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Заглавие</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3 col-6">
                <label for="category" class="form-label">Категория</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <div class="mb-3 col-6">
                <label for="price" class="form-label">Цена</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3 col-6">
                <label for="image" class="form-label">Снимка</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3 col-6">
                <label for="supply" class="form-label">Наличност</label>
                <input type="number" class="form-control" id="supply" name="supply" required>
            </div>
            <div class="mb-3 col-6">
                <label for="discount" class="form-label">Намаление</label>
                <input type="number" class="form-control" id="discount" name="discount" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary fw-bold border-white bg-white text-dark">Добави</button>
            </div>
        </form>
    </div>
</div>

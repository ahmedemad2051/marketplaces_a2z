<?php require_once "main/header.php"; ?>

<div class="container">
    <?php require_once "main/msg.php"; ?>
    <div class="col-md-5">
        <div class="form-area">
            <form role="form" method="post" enctype="multipart/form-data">
                <br style="clear:both">
                <div class="form-group">
                    <label>Client</label>
                    <select class="form-control" name="client_id">
                        <option>1</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('client_id'); ?></span>
                </div>
                <div class="form-group">
                    <label>ASIN</label>
                    <input type="text" class="form-control" name="asin" required>
                    <span class="text-danger"><?php echo form_error('asin'); ?></span>
                </div>
                <div class="form-group">
                    <label>Marketplace</label>
                    <div class="col-xs-12">
                        <span>
                            <strong>US</strong>
                        <input type="radio" checked name="marketplace_id" value="US">
                        </span>
                        <span>
                            <strong>CA</strong>
                        <input type="radio" name="marketplace_id" value="CA">
                        </span>
                          <span>
                            <strong>MX</strong>
                        <input type="radio" name="marketplace_id" value="MX">
                        </span>
                          <span>
                            <strong>UK</strong>
                        <input type="radio" name="marketplace_id" value="UK">
                        </span>
                          <span>
                            <strong>DE</strong>
                        <input type="radio" name="marketplace_id" value="DE">
                        </span>
                          <span>
                            <strong>FR</strong>
                        <input type="radio" name="marketplace_id" value="FR">
                        </span>
                          <span>
                            <strong>IT</strong>
                        <input type="radio" name="marketplace_id" value="IT">
                        </span>
                          <span>
                            <strong>ES</strong>
                        <input type="radio" name="marketplace_id" value="ES">
                        </span>
                    </div>
                    <span class="text-danger"><?php echo form_error('marketplace_id'); ?></span>
                </div>
                <div class="form-group">
                    <label>SEO</label>
                    <div class="col-xs-12">
                          <span>
                            <strong>title</strong>
                        <input type="checkbox" name="seo[]" value="title">
                        </span>
                        <span>
                            <strong>bullet points</strong>
                        <input type="checkbox" name="seo[]" value="bullet_points">
                        </span>
                        <span>
                            <strong>product description</strong>
                        <input type="checkbox" name="seo[]" value="product_description">
                        </span>
                        <span>
                            <strong>images</strong>
                        <input type="checkbox" name="seo[]" value="images">
                        </span>
                        <span>
                            <strong>search terms</strong>
                        <input type="checkbox" name="seo[]" value="search_terms">
                        </span>
                        <span>
                            <strong>browse node</strong>
                        <input type="checkbox" name="seo[]" value="browse_node">
                        </span>
                        <span>
                            <strong>attributes</strong>
                        <input type="checkbox" name="seo[]" value="attributes">
                        </span>
                    </div>
                    <span class="text-danger"><?php echo form_error('seo'); ?></span>
                </div>
                <div class="form-group">
                    <label>start date</label>
                    <input type="date" class="form-control" name="date_start" required>
                    <span class="text-danger"><?php echo form_error('date_start'); ?></span>
                </div>
                <div class="form-group">
                    <label>bulk upload</label>
                    <input type="file" class="form-control" name="bulk_upload">
                    <span class="text-danger"><?php echo form_error('bulk_upload'); ?></span>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
</div>


<?php require_once "main/footer.php"; ?>

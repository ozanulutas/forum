<article class="categories">  
    <h1>KATEGORİLER</h1>

    <section class="category">

        <?php foreach($categories as $category) { ?>
            <h2> <?php echo $category->name; ?> </h2>
            <?php foreach($forums as $forum) { 
                if($forum->category_id == $category->id) { ?>
                    <h3> <?php echo $forum->name; ?> </h3>
                <?php }}} ?>
                
        
        
        <h2> <?php //echo $category->name; ?></h2>
        <section class="forum">
            <h3>Forum-1</h3>
            <p>Açıklama...</p>
            <section class="sub-forum">
                <h4>Alt-Forum1</h4>
                <h4>Alt-Forum2</h4>
                <h4>Alt-Forum3</h4>
                <h4>Alt-Forum1</h4>
                <h4>Alt-Forum2</h4>
                <h4>Alt-Forum3</h4>
                <h4>Alt-Forum1</h4>
                <h4>Alt-Forum2</h4>
                <h4>Alt-Forum3</h4>
            </section>
        </section>

        <section class="forum">
            <h3>Forum-2</h3>
            <p>Açıklama...</p>
            <section class="sub-forum">
                <h4>Alt-Forum1</h4>
                <h4>Alt-Forum2</h4>
                <h4>Alt-Forum3</h4>
            </section>
        </section>

        <section class="forum">
            <h3>Forum-3</h3>
            <p>Açıklama...</p>
            <section class="sub-forum">

            </section>
        </section>

    </section>
</article>
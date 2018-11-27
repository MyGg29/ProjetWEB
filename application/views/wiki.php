<div class="contentWiki">
    <h1>Wiki</h1>
    <div class="gridWiki">
    <?php
        foreach($this->donneeCarte as $key=>$value){
            $this->id = $key;
            $this->titre = $value["titre"];
            $this->description = $value["description"];
            $this->image = $value["image"];
            include("../application/layout/card.php");
        }
    ?>
    </div>
</div>
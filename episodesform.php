<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){

include("header.php");
?>

<main>
<?php include("adminmenu.php"); ?>

<?php
if(isset($_REQUEST["status"])){
    echo("<div id='respondContent'>");
    if($_REQUEST["status"]==1){
        echo("Content is Saved.");
    }
    echo("</div>");
}
?>

<section id="content">

<form id="contentForm" action="insertEpisodes.php" method="POST" enctype="multipart/form-data">

    <!-- Series Selection -->
    <div class="form-group co">
        <label for="series">Select Series:</label>
        <select name="epseries" id="series" class="form-control">
            <option value="" disabled selected>Select the Series</option>
            <?php
            include("connectdb.php");
            $series=mysqli_query($con,"SELECT cid, cseason, cname FROM content_info WHERE ctype='Series'");
            while($row=mysqli_fetch_array($series)){
                $name=$row["cname"];
                $id=$row["cid"];
                echo("<option value='$id'>$name</option>");
            }
            ?>
        </select>
    </div>

    <!-- Season Section -->
    <div class="form-group co" id="seasonDiv" style="display:none;">
        <label id="seasonLabel">Season Number:</label>
        <div id="seasonInput"></div>
    </div>

    <!-- Number of Episodes -->
    <div class="form-group co" id="episodeCountDiv" style="display:none;">
        <label id="episodeLabel"></label>
        <input type="number" id="episodeCount" name="epnum" class="form-control" min="1" placeholder="Enter number of episodes">
    </div>

    <!-- Dynamic Episode Fields will appear here -->
    <div id="episodesContainer"></div>

    <button type="submit" class="btn btn-danger mt-3">Submit</button>

</form>
</section>

</main>

<script src="jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

    // When a series is selected
    $("#series").change(function(){
        var seriesId = $(this).val();
        if(seriesId){
            $.ajax({
                url: "getSeason.php",
                type: "POST",
                data: {id: seriesId},
               success: function(response){
    console.log("Response from getSeason.php:", response); // debug line

    $("#seasonDiv").show();
    $("#seasonInput").empty();
    $("#episodeCountDiv").hide();
    $("#episodesContainer").empty();

    var totalSeasons = parseInt(response.trim());
    console.log("Parsed totalSeasons:", totalSeasons); // debug line

    if (totalSeasons > 1) {
        $("#seasonLabel").text("Select Season:");
        var selectHTML = `<select name="eseason" id="seasonSelect" class="form-control">
                            <option value="" disabled selected>Select Season</option>`;
        for (var i = 1; i <= totalSeasons; i++) {
            selectHTML += `<option value="${i}">Season ${i}</option>`;
        }
        selectHTML += `</select>`;
        $("#seasonInput").html(selectHTML);
    } else {
        $("#seasonLabel").text("Season Number:");
        $("#seasonInput").html(`<input type="text" name="eseason" id="season" class="form-control" readonly value="1">`);
        $("#episodeCountDiv").show();
        $("#episodeLabel").text("Number of Episodes (Season 1):");
    }
}

            });
        }
    });

    // When a season is selected (for series having multiple seasons)
    $(document).on("change", "#seasonSelect", function(){
        var seasonNo = $(this).val();
        if(seasonNo){
            $("#episodeCountDiv").show();
            $("#episodeLabel").text("Number of Episodes (Season " + seasonNo + "):");
            $("#episodesContainer").empty();
        }
    });

    // When episode count entered
    $("#episodeCount").on("input", function(){
        var count = $(this).val();
        $("#episodesContainer").empty();

        for(var i=1; i<=count; i++){
            var epHTML = `
            <div class="episode-block" style="border:1px solid #ccc; padding:15px; margin-top:10px; border-radius:10px;">
                <h4>Episode ${i}</h4>
                <div class="form-group co">
                    <label>Episode Name:</label>
                    <input type="text" name="ename[]" class="form-control" placeholder="Episode ${i} Name" required>
                </div>
                <div class="form-group co">
                    <label>Description:</label>
                    <textarea name="edesc[]" class="form-control" rows="3" placeholder="Episode ${i} Description" required></textarea>
                </div>
                <div class="form-group co">
                    <label>Episode File:</label>
                    <input type="file" name="efile[]" class="form-control" required>
                </div>
                <div class="form-group co">
                    <label>Release Date:</label>
                    <input type="date" name="edate[]" class="form-control" required>
                </div>
            </div>`;
            $("#episodesContainer").append(epHTML);
        }
    });
});
</script>

<?php
}
else{
    include("home.php");
}
?>

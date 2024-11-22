<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form style= "color: white;" class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Student Number </label>
            <input type="text" name="saddress" required/>
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="class" required>
                <option value="" selected disabled>Select Department</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div>
        <a href='index.php'><input class="submit" type="submit" value="Save"  /> <
    </form>
</div>
</div>
</body>
</html>


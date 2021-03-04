<?php
require 'inc/functions.php';

$pageTitle = "Time Tracker";
$page = null;

include 'inc/header.php';
?>
	<div class="section catalog random">
    <div class="col-container actions-container">

      <h1>Welcome</h1>
      <p class="actions-copy">What would you like to do today?</p>
      <div>
        <ul class="actions">
          <li class="actions-item">
            <a class="actions-link" href="task.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
                Add Task
            </a>
          </li>
        </ul>
      </div>

		</div>

	</div>

<?php include("inc/footer.php"); ?>

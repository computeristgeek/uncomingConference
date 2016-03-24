<?php
	$title='International Conference on New Trends for Sustainable Energy';
	$keywords='icntse,pua,kth,international conference,new trends,sustainable energy,science,extended abstract,call for papers';
	$description='The official website for the International Conference on New Trends for Sustainable Energy (ICNTSE) Conference, OCT 1-3, with the cooperation of PUA, Egypt and KTH, Sweden';
?>
<?php include 'header.php' ?>
  <body style="padding-top: 50px;">
<?php include('navbar.php');?>
    <div class="container">
        <div class="row">
        	<div class="col-md-4">
        		<br>
        		<div class="panel panel-default">
						<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Conference News</b></div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<ul class="news_list">
											<li class="news-item">Imprtant dates has been updated, please check the dates again by<a href="home.php#callPapers">Click here</a></li>
											<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
											<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
											<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
											<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
											<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
										</ul>
									</div>
								</div>
							</div>
						<div class="panel-footer"> </div>
				</div>
        	</div>
    	</div>
    </div>
    <script type="text/javascript">
    $(function () {
		$(".news_list").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
<?php include 'footer.php' ?>
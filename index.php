<?php include './template/header.php' ?>


<div class='panel panel-default'>
	<div class='panel-heading'><center><h1>Movie List</h1></center></div>
		<div class='panel-body'>
		  <table class='table table-striped table-responsive table-bordered'>
			<thead>
			  <tr>
				<th align='center'>Poster</th>
				<th align='center'>Title</th>
				<th align='center'>Running Time</th>
				<th align='center'>Release Date</th>
				<th align='center'>Language</th>
				<th align='center'>Genre</th>
				<th align='center'>Screening Time</th>
				<th align='center'>Action</th>
			  </tr>
			</thead>
			<tbody>

				<tr>
					<td align='center'><img src=./images/posters/kubo.jpg class='img-thumbnail img-responsive' width="150px"></td>
					<td>Kubo And The Two Strings</td>
					<td>1 Hour 41 Minutes</td>
					<td>25 Aug 2016</td>
					<td>English</td>
					<td><i>Animation</i></td>
					<td>2:00 pm - 4:00 pm</td>
					<td><button id="movieCode" value="movie1" class="btn btn-success">Book this movie</button></td>
				</tr>
				<tr>
					<td align='center'><img src=./images/posters/suicide.jpg class='img-thumbnail img-responsive' width="150px"></td>
					<td>Suicide Squad</td>
					<td>2 Hours 3 Minutes</td>
					<td>04 Aug 2016</td>
					<td>English</td>
					<td><i>Action</i></td>
					<td>4:30 pm - 6:30 pm</td>
					<td><button id="movieCode" value="movie2" class="btn btn-success">Book this movie</button></td>
				</tr>
				<tr>
					<td align='center'><img src=./images/posters/lightsout.jpg class='img-thumbnail img-responsive' width="150px"></td>
					<td>Lights Out</td>
					<td>1 Hour 29 Minutes</td>
					<td>21 Jul 2016</td>
					<td>English</td>
					<td><i>Horror</i></td>
					<td>7:00 pm - 9:00 pm</td>
					<td><button id="movieCode" value="movie3" class="btn btn-success">Book this movie</button></td>
				</tr>
				<tr>
					<td align='center'><img src=./images/posters/traintobusan.jpg class='img-thumbnail img-responsive' width="150px"></td>
					<td>Train To Busan</td>
					<td>1 Hour 58 Minutes</td>
					<td>08 Sep 2016 </td>
					<td>Korean</td>
					<td><i>Drama / Thriller</i></td>
					<td>9:30 pm - 11:30 pm</td>
					<td><button id="movieCode" value="movie4" class="btn btn-success">Book this movie</button></td>
				</tr>
				<tr>
					<td align='center'><img src=./images/posters/onepiece.jpg class='img-thumbnail img-responsive' width="150px"></td>
					<td>One Piece Film: Gold </td>
					<td>1 Hour 58 Minutes</td>
					<td>08 Sep 2016 </td>
					<td>Japanese</td>
					<td><i>Action / Anime</i></td>
					<td>12:00 am - 2:00 am</td>
					<td><button id="movieCode" value="movie5" class="btn btn-success">Book this movie</button></td>
				</tr>


			</tbody>
		</table>
		</div>
	</div>
<?php include './template/footer.php' ?>
<div class="block">
	<div class="header">
		<div class="title">
			<h6> مقالات ثبت شده </h6>
			<p> در این قسمت میتوانید مقالات ثبت شده را مدیریت کنید </p>
		</div>
	</div>
	<div class="body">
		<div class="table-mask">
			<table>
				<thead>
				<tr>
					<th> ردیف </th>
					<th> عنوان </th>
					<th> خلاصه مقاله </th>
					<th> کلیدواژه ها </th>
					<th> تعداد بازدید </th>
					<th> امتیاز </th>
					<th> تاریخ ثبت </th>
					<th> گزینه ها </th>
				</tr>
				</thead>
				<tbody>
				<?php
				if(!empty($data)):
					$num=1;
					foreach($data as $item):
						?>
						<tr>
							<td><?php echo $num++ ?></td>
							<td><?php echo $item->title; ?></td>
							<td><?php echo $item->demo; ?></td>
							<td><?php echo implode('، ',json_decode($item->keywords)); ?></td>
							<td><?php echo $item->views; ?></td>
							<td><?php echo $item->score; ?></td>
							<td><?php echo $calendar->date("j F Y",$item->createdAt); ?></td>
							<td>
								<div class="more">
									<div class="item">
										<i class="fal fa-ellipsis-h"></i>
									</div>
									<div class="menu">
										<a href="/articles/<?php echo $item->id ?>/information"><span><i class="far fa-file-alt"></i> نمایش </span></a>
										<a href="/account/articles/<?php echo $item->id ?>/edit"><span><i class="far fa-file-edit"></i> ویرایش </span></a>
										<a href="#delete" class="balloon" balloon-timeout="0" balloon-position="right" balloon-text="دوبار کلیک کنید" data-id="<?php echo $item->id ?>"><span><i class="far fa-trash"></i> حذف </span></a>
									</div>
								</div>
							</td>
						</tr>
					<?php
					endforeach;
				else:
					?>
					<tr>
						<td colspan="6" class="no-data"> موردی برای نمایش وجود ندارد! </td>
					</tr>
				<?php
				endif;
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
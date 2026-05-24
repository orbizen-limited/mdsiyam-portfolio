<!DOCTYPE html>
<html lang="en">

<head>
	<?php $title = '404';
	include('partials/title-meta.php'); ?>

	<?php include('partials/head-css.php'); ?>
</head>

<body>

<?php include('partials/navbar.php'); ?>

<section class="relative pb-25 pt-35">
	<div class="absolute top-25 start-1/2 -translate-x-1/2 overflow-hidden">
		<div class="md:w-200 w-92 mx-auto md:px-7.5 px-5">
			<div class="md:flex hidden rounded-2xl p-3 bg-default-900 overflow-hidden">
				<div class="bg-body-bg w-full h-15 overflow-hidden"></div>
			</div>
		</div>
	</div>

	<div class="inner-container-small">
		<div
			class="relative z-10 flex flex-col overflow-hidden gap-20 bg-[linear-gradient(137deg,var(--color-secondary),var(--color-primary)_23%)]">
			<div
				class="absolute z-10 md:h-15 h-12 w-full start-0 end-0 top-0 bg-linear-to-b to-body-bg/0 via-body-bg/65 from-body-bg"></div>
			<div
				class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:start-3.75 start-2 z-10 absolute opacity-40"></div>
			<div
				class="border border-default-950 border-dashed w-px h-full top-0 bottom-0 md:end-3.75 end-2 z-10 absolute opacity-40"></div>
			<img src="/public/images/svg/shape.svg" alt=""
				 class="absolute -bottom-1.25 w-full h-6 object-cover bg-center">

			<div class="md:pt-30 md:pb-25 md:px-11.25 py-20 px-6 text-center flex flex-col gap-5">
				<h2 class="text-[100px]">404</h2>
				<div class="flex flex-col gap-1.25">
					<h3 class="text-[26px]">Page not found</h3>
					<p class="text-base text-default-600">The page you are looking for doesn't exist or has been
						moved.</p>
				</div>

				<div class="flex justify-center">
					<a href="/" target="_blank"
					   class="p-0.75 rounded-xl bg-white/30 justify-center items-center inline-flex">
						<div class="flex items-center gap-2.5 rounded-xl bg-white py-3 px-5.5">
							<img src="/public/images/svg/home-filled.svg" loading="eager" alt="Calendar Icon"
								 class="size-3.5">
							<div class="font-medium">Back to home</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('partials/footer.php'); ?>

</body>

</html>
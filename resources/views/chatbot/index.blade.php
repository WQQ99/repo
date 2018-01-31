@extends('layouts.app')

@section('content')

	<div class="br-mainpanel" style="margin-left: 0;">

		<div class="br-pageheader">
			<nav class="breadcrumb pd-0 mg-0 tx-12">
				<a class="breadcrumb-item" href="index.html">AliFastEZ</a>
				<a class="breadcrumb-item" href="#">Home</a>
				<span class="breadcrumb-item active">Request for Quotation</span>
			</nav>
		</div><!-- br-pageheader -->
		<div class="br-pagetitle">
			<i class="icon ion-android-laptop tx-70 lh-0 tx-gray-800"></i>
			<div class="pd-sm-l-20 mg-t-10 mg-sm-t-0">
				<h4 class="tx-gray-800 mg-b-5">Request for Quotation</h4>
				<p class="mg-b-0">Looking or sourcing for a product? Talk to our chatbot & tap on our amazing
				                  suppliers!</p>
			</div>
		</div><!-- d-flex -->

		<div class="br-pagebody">

			<div class="row row-sm mg-t-20">
				<div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
					<div class="card shadow-base widget-6">
						<div class="card-header">
							<div class="media align-items-center">
								<img src="http://via.placeholder.com/280x280"
								     class="wd-50 rounded-circle d-flex mg-r-10 mg-xs-r-15 align-self-start" alt="">
								<div class="media-body">
									<span class="d-block tx-medium tx-inverse">AliFastEz Chatbot</span>
									<span class="tx-12">Active now</span>
								</div><!-- media-body -->
							</div><!-- media -->
							<span class="tx-12">
                  {{--<a href="" class="tx-gray mg-r-10">Chat History</a>--}}
                  {{--<a href="" class="tx-gray mg-r-10">Report</a>--}}
                  {{--<a href="" class="tx-gray"><i class="fa fa-angle-down tx-14"></i></a>--}}
                </span>
						</div><!-- card-header -->
						<div class="card-body pd-25">
							<div class="media-list">

								<div class="media">
									<img src="http://via.placeholder.com/280x280" class="wd-36 rounded-circle mg-r-20"
									     alt="">
									<div class="media-body tx-12">
										<div class="chat-1">
											Hey, what's up?
										</div>
										<span class="chat-time">3:00pm</span>
									</div><!-- media-body -->
								</div><!-- media -->

								<div class="media mg-t-20">
									<img src="http://via.placeholder.com/280x280" class="wd-36 rounded-circle mg-r-20"
									     alt="">
									<div class="media-body tx-12">
										<div class="chat-2">
											So you want to eat snow? is it safe?
										</div>
										<span class="chat-time">3:10pm</span>
										<hr class="invisible mg-y-2">

										<div class="chat-2">
											Hahahaah!
										</div>
										<span class="chat-time">3:12pm</span>

										<hr class="invisible mg-y-2">

										<div class="chat-2">
											Researchers are generally less concerned about what's in the snow
											than the fact that climate change may be causing it to rapidly disappear.
										</div>
										<span class="chat-time">3:12pm</span>
									</div><!-- media-body -->
								</div><!-- media -->

								<div class="media mg-t-20">
									<img src="http://via.placeholder.com/280x280" class="wd-36 rounded-circle mg-r-20"
									     alt="">
									<div class="media-body tx-12">
										<div class="chat-1">
											When I come to your wedding or civil partnership I realise I am the least
											important person there and I will take the lead from you on the type of
											photos you want.
										</div>
										<span class="chat-time">3:20pm</span>

										<hr class="invisible mg-y-2">

										<div class="chat-1">
											It’s your day so I do what you say.
										</div>
										<span class="chat-time">3:21pm</span>
									</div><!-- media-body -->
								</div><!-- media -->

							</div><!-- media-list -->
						</div><!-- card-body -->
						<div class="card-footer">
							<div class="media">
								<img src="http://via.placeholder.com/280x280" class="wd-36 rounded-circle mg-r-20"
								     alt="">
								<div class="media-body">
									<input type="text" class="form-control tx-12" placeholder="Type your message">
								</div><!-- media-body -->
							</div><!-- media -->
						</div><!-- card-footer -->
					</div><!-- card -->
				</div><!-- col-8 -->
			</div><!-- row -->
		</div>
	</div>



@endsection
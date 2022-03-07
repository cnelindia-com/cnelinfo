
<div class="bg-base-1 flex-fill" style="display:none">
    <div class="container py-3 my-3">
        <div class="row">
            <div class="col-10" style="left: 33%; position: absolute;">
               <form id="formcustomview" action="{{ route('reports.new') }}" method="post" enctype="multipart/form-data" autocomplete="off">
			  @csrf
	          
	<div class="row">
		<div class="col-12">
			<div class="form-row">
				<div class="col-12 col-md">
					<div>
						<div class="input-group input-group-lg">
							<input type="text" dir="ltr" name="url" data-url="" class="form-control font-size-lg" autocapitalize="none" spellcheck="false" id="i-url" value="https://<?php echo $data; ?>" placeholder="https://example.com" autofocus="">
								<input type="text" name="user_idhwe" value="1" >
								
							
						</div>
													</div>
				</div>
				<div class="col-12 col-md-auto">
					<button id="buttonchecksubmit" class="btn btn-primary btn-lg btn-block font-size-lg mt-3 mt-md-0 position-relative" type="submit" data-button-loader="">
						Submit​
					</button>
				</div>
			</div>
		</div>

	
	</div>
</form>
            </div>
        </div>
    </div>
</div>
<script src="{!!url('/js/app.js')!!}"></script>

	
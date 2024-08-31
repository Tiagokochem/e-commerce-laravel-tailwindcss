<div>
    <livewire:bread-crumb :url="$currentUrl" />
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
        <!-- Card -->
        <div class="p-4 shadow bg-slate-100 rounded-xl sm:p-7 dark:bg-neutral-900">
            <form wire:submit="save">
                <!-- Section -->
                <div class="grid gap-2 py-8 border-t border-gray-200 sm:grid-cols-12 sm:gap-4 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Add New Product
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Product name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div>
                            <input type="text" wire:model="product_name" id="af-submit-application-full-name" class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
							@error('product_name') <span class="text-red-500">{{ $message }}</span> @enderror
						</div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Price
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <input id="af-submit-application-email" wire:model="product_price" type="text" inputmode="decimal" pattern="[0-9]*[.,]?[0-9]*" class="block w-full px-3 py-2 text-sm rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
						@error('product_price') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->

					<div class="sm:col-span-3">
                        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Category
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
						<select wire:model="category_id" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
							<option selected="">Select Product Category</option>
							@foreach ($all_categories as $category)
								<option value="{{ $category->id }}" wire:key="{{ $category->id }}">{{$category->name}}</option>
							@endforeach
							
						</select>
						@error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->
                </div>
                <!-- End Section -->

                <!-- Section -->
                <div class="grid gap-2 py-8 border-t border-gray-200 sm:grid-cols-12 sm:gap-4 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            More Details
                        </h2>
                    </div>
                    <!-- End Col -->
					<div class="sm:col-span-3">
                        
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
					@if ($photo) 
						<img src="{{ $photo->temporaryUrl() }}" alt="Product image" height="300px" width="300px" class="rounded-lg">
					@else
						<img src="{{ asset('images/placeholder-image.jpg')}}" alt="default image" height="300px" width="300px" class="rounded-lg">
					@endif
					</div>
                    <!-- End Col -->
                    <div class="sm:col-span-3">
                        <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Product Image
                        </label>
                    </div>
                    <!-- End Col -->
					
                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = true" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" class="sm:col-span-9">
                        <label for="file" class="sr-only">Choose Image</label>
                        <input type="file" wire:model="photo" id="file" class="block w-full text-sm border rounded-lg shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
						@error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
                        <!-- File Uploading Progress Form -->
                        <div x-show="uploading">
                            <!-- Progress Bar -->
                            <div class="flex items-center gap-x-3 whitespace-nowrap">
                                <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full dark:bg-neutral-700" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                                    <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-blue-600 rounded-full whitespace-nowrap dark:bg-blue-500" :style="`width: ${progress}%`"></div>
                                </div>
                                <div class="w-6 text-end">
                                    <span class="text-sm text-gray-800 dark:text-white" x-text="`${progress}%`"></span>
                                </div>
                            </div>
                            <!-- End Progress Bar -->
                        </div>
                        <!-- End File Uploading Progress Form -->
                    </div>

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Product description
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <textarea id="af-submit-application-bio" wire:model="product_description" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Add a product description here!"></textarea>
						@error('product_description') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->
                </div>
                <!-- End Section -->
                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    <div wire:loading class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white-600 rounded-full dark:text-blue-500" role="status" aria-label="loading">
                      <span class="sr-only">Loading...</span>
                    </div>  
                  Submit and Save
                </button>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>
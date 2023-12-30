<h4 class="comments-count">
    @if($$module_name_singular->comments->count())
        {{$$module_name_singular->comments->count()}} Comment
    @endif
</h4>
@guest()
    <div class="reply-form">
        <h4>Leave a Reply</h4>
        <a href="{{ route('login')}}?redirectTo={{url()->current() }}" class="btn btn-primary">Login To Comment</a>
    </div>

@else
    <div class="reply-form">
        <h4>Leave a Reply</h4>
        <p>Your email address will not be published. Required fields are marked * </p>
        {{ html()->form('POST', route("frontend.comments.store"))->class('form')->open() }}
        <div class="row">
            <div class="col-md-12 form-group">
                    <?php
                    $field_name = 'name';
                    $field_lable = "Subject";
                    $field_placeholder = $field_lable;
                    $required = "required";
                    ?>
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
            <div class="col-md-12 form-group">
                    <?php
                    $field_name = 'comment';
                    $field_lable = "Comment";
                    $field_placeholder = $field_lable;
                    $required = "required";
                    ?>
                {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "rows"=>"4"]) }}
            </div>
                <?php
                $field_name = 'post_id';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "required";
                ?>
            {{ html()->hidden($field_name)->value(encode_id($$module_name_singular->id))->attributes(["$required"]) }}

                <?php
                $field_name = 'user_id';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "required";
                ?>
            {{ html()->hidden($field_name)->value(encode_id(auth()->user()->id))->attributes(["$required"]) }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        {{ html()->form()->close() }}
    </div>
    <div>
        <div class="mt-5">
            @php
                $comments_all = $$module_name_singular->comments;
                $comments_level1 = $comments_all->where('parent_id','');
            @endphp

            @foreach ($comments_level1 as $comment)

                <div class="flex flex-col my-10">
                    <div class="mr-2 my-2">
                        <a href="#" class="">
                            <h4 class="">
                                {{$comment->name}}
                            </h4>
                            <div class="font-normal text-gray-700">
                                {!!$comment->comment!!}
                            </div>
                        </a>
                    </div>

                    @php
                        $comments_of_comment = $comments_all->where('parent_id', $comment->id);
                    @endphp

                    @if ($comments_of_comment)
                        @foreach ($comments_of_comment as $comment_reply)
                            <div class="ml-4 my-4">
                                <a href="#" class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <div class="font-normal text-gray-700 dark:text-gray-400">
                                        {!!$comment_reply->comment!!}
                                    </div>
                                </a>
                            </div>

                        @endforeach
                    @endif

                    @guest
                        <a href="{{route('login')}}?redirectTo={{url()->current()}}" class="btn btn-primary btn-sm float-end m-0"><i class="fas fa-user-shield"></i> Login & Reply</a>
                    @else
                        <div class="mt-4">
                            {{ html()->form('POST', route("frontend.comments.store"))->class('form flex flex-row')->open() }}

                                <?php
                                $field_name = 'parent_id';
                                $field_lable = label_case($field_name);
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                            {{ html()->hidden($field_name)->value(encode_id($comment->id))->attributes(["$required"]) }}

                                <?php
                                $field_name = 'post_id';
                                $field_lable = label_case($field_name);
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                            {{ html()->hidden($field_name)->value(encode_id($$module_name_singular->id))->attributes(["$required"]) }}

                                <?php
                                $field_name = 'user_id';
                                $field_lable = label_case($field_name);
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                            {{ html()->hidden($field_name)->value(encode_id(auth()->user()->id))->attributes(["$required"]) }}

                                <?php
                                $field_name = 'name';
                                $field_lable = label_case($field_name);
                                $field_placeholder = $field_lable;
                                $required = "required";
                                ?>
                            {{ html()->hidden($field_name)->value("Reply of ".$comment->name)->attributes(["$required"]) }}
                            {{ html()->hidden($field_name)->value(encode_id(auth()->user()->id))->attributes(["$required"]) }}

                            <div class="flex-auto mx-4">
                                    <?php
                                    $field_name = 'comment';
                                    $field_lable = "Reply";
                                    $field_placeholder = $field_lable;
                                    $required = "required";
                                    ?>
                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                            </div>

                            <div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>

                            {{ html()->form()->close() }}
                        </div>
                    @endguest
                </div>

            @endforeach
        </div>
    </div>

@endguest

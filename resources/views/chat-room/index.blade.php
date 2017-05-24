@extends('layouts.app')

@section('title', '聊天室')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>
                活動列表
            </h3>
            <ul>
                <li>
                    老蕭燒烤魯4/15午飯
                </li>
                <li>
                    胡媽媽韭菜盒子
                </li>
                <li>
                    古早味紅茶冰
                </li>
                <li>
                    港式燒臘4/16午餐
                </li>
                <li>
                    麥當勞早餐代購
                </li>
                <li>
                    星享道懷石料理吃到飽
                </li>
                <li>
                    牛排大叔4/25 18:00
                </li>
                <li>
                    想上水餃 集購
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="text-left">
                聊天室
            </h3>
            <div class="form-group">
                <p>
                    Lorem ipsum dolor sit amet,
                    <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus.
                    <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em>Proin massa magna, vulputate nec bibendum nec, posuere nec lacus.
                    <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                </p>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" />
                </div>
                <button type="button" class="btn btn-primary">
                    Default
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <h3>
                會員列表
            </h3>
            <ul class="list-unstyled">
                <li>
                    陳姍姍
                </li>
                <li>
                    豬小妹
                </li>
                <li>
                    東協
                </li>
                <li>
                    西賭
                </li>
                <li>
                    北蓋
                </li>
                <li>
                    南地
                </li>
                <li>
                    中通通
                </li>
                <li>
                    夢幻柯南
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

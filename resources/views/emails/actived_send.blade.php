<div style="width: 600px; margin: 0px auto">
    <div style="text-align: center">
        <h2>Xin chào {{ $user->name }}</h2>
        <p>Bạn đã đăng kí thành công tài khoản ở ShopTK.</p>
        <p>Đây là mật khẩu của bạn: <span style="color: greenyellow">{{ $password_send }}</span></p>
        <P>Để kích hoạt tài khoản của bạn vui lòng nhấn vào nút kích hoạt bên dưới.</P>
        <a  href="{{ route('site.actived',['id'=>$user->id,'actived_token'=>$user->actived_token]) }}" style="font-size: medium; display: inline-block; background-color: green; color: white; padding: 7px 25px; font-weight: bold;">Kích hoạt ngay</a>

    </div>
</div>
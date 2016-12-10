<div class="row">
    <div class="container">
        <form class="col s12 m4 l8 offset-l2">
            {{ csrf_field() }}
                <h4 class="light-green-text text-accent-2">Sign Up!</h4>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light green-accent-2" type="submit" name="action">Register<i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
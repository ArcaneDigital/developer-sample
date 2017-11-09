<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div class="panel">
        <h1>Registration Form</h1>
    </div>

    <div class="form panel">
        <form action="/register" method="post">
            <div class="input-container">
                <label for="email">Email:</label>
                <input id="email" title="Email" type="email" name="email" required />
            </div>
            <div class="input-container">
                <label for="createPassword">Create Password:</label>
                <input id="createPassword" title="Create Password" type="password" name="createPassword" required />
            </div>
            <div class="input-container">
                <label for="confirmPassword">Confirm Password:</label>
                <input id="confirmPassword" title="Confirm Password" type="password" name="confirmPassword" required />
            </div>
            <div class="input-container">
                <label for="firstName">First Name:</label>
                <input id="firstName" title="First Name" type="text" name="firstName" required />
            </div>
            <div class="input-container">
                <label for="lastName">Last Name:</label>
                <input id="lastName" title="Last Name" type="text" name="lastName" required />
            </div>
            <div class="input-container">
                <label for="birthDay">Birth Day:</label>
                <input id="birthDay" title="Birth Day" type="number" name="birthDay" required />
            </div>
            <div class="input-container">
                <label for="birthMonth">Birth Month:</label>
                <input id="birthMonth" title="Birth Month" type="number" name="birthMonth" required />
            </div>
            <div class="input-container">
                <label for="birthYear">Birth Year:</label>
                <input id="birthYear" title="Birth Year" type="number" name="birthYear" required />
            </div>
            <div class="input-container">
                <label for="phone">Phone Number:</label>
                <input id="phone" title="Phone Number" type="tel" name="phone" required />
            </div>
            <div class="input-container">
                <label for="address">Address:</label>
                <input id="address" title="Address" type="text" name="address" required />
            </div>
            <div class="input-container">
                <label for="city">City:</label>
                <input id="city" title="City" type="text" name="city" required />
            </div>
            <div class="input-container">
                <label for="province">Province:</label>
                <select id="province" title="Province" name="province" required>
                    <option value="" selected disabled>Select Province</option>
                    @foreach (__('form.province.options') as $option)
                        <option value="{!! $option['value'] !!}">{!! $option['name'] !!}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-container">
                <label for="postalCode">Postal Code:</label>
                <input id="postalCode" title="Postal Code" type="text" name="postalCode" required />
            </div>
            <div class="input-container checkbox">
                <input id="confirmInfo" title="Information Confirmation" type="checkbox" name="confirmInfo" required />
                <label for="confirmInfo">I confirm that all of my information is correct</label>
            </div>
            <div class="input-container checkbox">
                <input type="submit" value="Submit" />
            </div>
        </form>
    </div>
</body>
</html>

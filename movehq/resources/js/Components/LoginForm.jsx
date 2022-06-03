import React from 'react'
import ReactDOM from 'react-dom'

const LoginForm = () => {
  return (
    <div>
      <form method="Post" action="/login">
        <label for='email'>Email</label>
        <input type='text' id='email' />
        <label for='password'>Password</label>
        <input type='text' id='password' />
        <button type="submit">Submit</button>
      </form>
    </div>
  )
}

export default LoginForm
if(document.getElementById('login')){
  ReactDOM.render(<LoginForm/>,document.getElementById('login'))
}
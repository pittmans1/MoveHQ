import React from 'react'
import ReactDOM from 'react-dom'

export default SignupForm = () => {
  return (
    <div>
      <form method="Post" action="/signup">
        <label for="name">Name</label>
        <input type='text' id='name' />
        <label for='email'>Email</label>
        <input type='text' id='email' />
        <label for='password'>Password</label>
        <input type='text' id='password' />
        <button type="submit">Submit</button>
      </form>
    </div>
  )
}

if(document.getElementById('signup')){
  ReactDOM.render(<SignupForm/>,document.getElementById('signup'))
}
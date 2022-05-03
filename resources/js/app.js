// PASSWORD VISIBLE
const showPassword = () => {
	const input = document.querySelector('.form-item-password input')
	const icon = document.querySelector('.form-item-password i')
	let state = false

	icon.addEventListener('click', () => {
		if(state) {
			input.type = 'password'
			icon.setAttribute('class', 'fa-solid fa-eye-slash')
		} else {
			input.type = 'text'
			icon.setAttribute('class', 'fa-solid fa-eye')
		}
		state = !state
	})
}
showPassword()

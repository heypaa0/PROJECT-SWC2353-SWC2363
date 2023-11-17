const bar = document.ElementById('bar');
const close = document.ElementById('close');
const nav = document.ElementById('navbar');

if (bar)
{
	bar.addEventListener('click', () =>
	{
		nav.classList.add('active');
	})
}

if (close)
{
	close.addEventListener('click', () =>
	{
		nav.classList.remove('active');
	})
}
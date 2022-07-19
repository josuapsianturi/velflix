describe('Authentication Test', () => {
    it('Provides feedback for invalid login credentials', () => {
        cy.visit('/login');
        cy.get('#email').type('user@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();
        cy.contains('Your provieded credentials could not be verified.');
    });
});

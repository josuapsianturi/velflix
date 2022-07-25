describe('Registration', () => {
    before(() => {
        cy.refreshDatabase().seed();
        cy.create('App\\Models\\User', {
            name: 'User Test',
            username: 'usertest',
            email: 'usertest@gmail.com',
            password: 'password'
        });
    });

    it('redirects authenticated users elsewhere', () => {
        cy.login();

        cy.visit('register').assertRedirect('/movies')
    });

    it('loads the sign up page', () => {
        // cy.visit('/register').contains('Register');
        cy.request('register').its('status').should('eq', 200); // 3 times faster

        // same as like this
        // cy.request('register').then(response => {
        //     expect(response.status).to.eq(200);
        // });
    });

    it('allows a user to sign up', () => {
        cy.visit('register');
        cy.get('#name').type('user test2');
        cy.get('#username').type('user test2');
        cy.get('#email').type('usertest2@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Submit').click();
        cy.contains('The username has already been taken.');
        cy.contains('The email has already been taken.');
    });

    it('displays username and email validation errors', () => {
        cy.visit('register');
        cy.get('#name').type('user test');
        cy.get('#username').type('user');
        cy.get('#email').type('user@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Submit').click();
        cy.contains('The username has already been taken.');
        cy.contains('The email has already been taken.')
    });
});

@extends ('layouts.master')


@section ('content')
  <section class="hero">
    <div class="container">

      <div class="content">
        <h1>Services</h1>
        <p>Humaan is a design and user–focused digital agency. We specialise in solving problems to produce intelligent designs, deliver engaging experiences and build meaningful connections. We work with great clients all over the world to create thoughtful and purposeful products.</p>
      </div>

      <div class="callouts">
        <a class="third callout pop" href="/docs/homestead">
          <div class="callout-head">
            <div class="callout-title">Sites Internet</div>
            <div class="callout-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path fill="#FFF" d="M12.1 16.2l3.7 3.8-7.9 7.9 4.2 4.2 7.9-7.9 3.8 3.7-8 7.9L20 40l7.9-7.9 4.2-4.2L40 20l-4.2-4.2-7.9 8-3.7-3.8 7.9-7.9-4.2-4.2-7.9 7.9-3.8-3.7 8-7.9L20 0l-7.9 7.9-4.2 4.2L0 20l4.2 4.2"></path></svg></div>
          </div>
          <div class="callout-body">
            <p>The official Laravel development environment. Powered by Vagrant, Homestead gets your entire team on the same page with the latest PHP, MySQL, Postgres, Redis, and more.</p>
          </div>
        </a>
        <a class="third callout pop teal" href="https://laracasts.com">
          <div class="callout-head">
            <div class="callout-title">Applications</div>
            <div class="callout-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path fill="#FFF" d="M4.1 40H36c2.2 0 4.1-1.8 4.1-4.1V4.1C40 1.8 38.2 0 35.9 0H4.1C1.8 0 0 1.8 0 4.1V36c0 2.2 1.8 4 4.1 4zM32.6 5.6h3.5v3.5h-3.5V5.6zm0 6.3h3.5v3.5h-3.5v-3.5zm0 6.4h3.5v3.5h-3.5v-3.5zm0 6.3h3.5v3.5h-3.5v-3.5zm0 6.3h3.5v3.5h-3.5v-3.5zm-20-18.6c0-.9.9-1.4 1.7-1L27.7 19c.7.4.7 1.5 0 2l-13.3 7.7c-.7.4-1.7-.1-1.7-1V12.3zM3.9 5.6h3.5v3.5H3.9V5.6zm0 6.3h3.5v3.5H3.9v-3.5zm0 6.4h3.5v3.5H3.9v-3.5zm0 6.3h3.5v3.5H3.9v-3.5zm0 6.3h3.5v3.5H3.9v-3.5z"></path></svg></div>
          </div>
          <div class="callout-body">
            <p>Hundreds (yes, hundreds) of Laravel and PHP video tutorials with new videos added every week. Skim the basics or start your journey to Laravel mastery. All for the price of lunch.</p>
          </div>
        </a>
        <a class="third callout pop" href="/docs/billing">
          <div class="callout-head">
            <div class="callout-title">Consultant</div>
            <div class="callout-icon"><svg xmlns="http://www.w3.org/2000/svg" width="38.4" height="40" viewBox="0 0 38.4 40"><path fill="#FFF" d="M4.9 37.8c-3 0-2.7-1.9-2.7-2.7V4.9c0-.9.2-2.7 2.7-2.7h19.7c.9 0 2.7-.3 2.7 2.7v17.3c.7-.3 1.4-.1 2.2-.3V4.4c0-1.7-.1-4.4-4.4-4.4H4.4C.4 0 0 2.7 0 4.4v31.2C0 37.3.1 40 4.4 40H24c-.7-.7-1.2-1.4-1.8-2.2H4.9zm7.2-17.1c-.8-.2-1.5-.4-2.1-.7v2.2c1.1.5 2.5.8 4.3.8v2.2h1.4v-2.3c1.4-.2 2.5-.5 3.2-1.2.8-.7 1.1-1.5 1.1-2.5 0-.8-.3-1.5-.8-2.1-.5-.5-1.4-1.1-2.7-1.6l-.8-.3v-3.8c1.1.1 2.2.3 3.3.8l.8-1.9c-1.3-.5-2.6-.8-4.1-.9V7.6h-1.4v1.8c-1.3.1-2.3.5-3.1 1.2-.8.6-1.2 1.4-1.2 2.4 0 .9.3 1.6.8 2.2.5.6 1.4 1.2 2.5 1.6l.9.3V21c-.6 0-1.3-.1-2.1-.3zm3.5-3.1c.7.2 1.2.5 1.4.8.3.3.4.6.4 1 0 .9-.6 1.4-1.9 1.6.1-.1.1-3.4.1-3.4zm-2.7-3.7c-.3-.3-.4-.6-.4-1s.2-.7.4-1c.3-.3.7-.4 1.3-.5v3.3c-.6-.2-1.1-.5-1.3-.8zM5.5 33.4h15c-.2-.7-.2-1.4-.2-2.2H5.5v2.2zm24.6-9.8c-4.5 0-8.2 3.7-8.2 8.2s3.7 8.2 8.2 8.2 8.2-3.7 8.2-8.2-3.6-8.2-8.2-8.2zm0 14.8c-3.6 0-6.6-3-6.6-6.6s3-6.6 6.6-6.6c2.1 0 4.1 1 5.3 2.6l-5.3 4.8-2.1-2.1c-.2-.2-.5-.2-.7 0l-.8.7c-.2.2-.2.4 0 .6l3.3 3c0 .2.1.2.2.2s.3-.1.3-.1l5.9-5.4c.3.7.4 1.5.4 2.2.1 3.7-2.8 6.7-6.5 6.7z"></path></svg></div>
          </div>
          <div class="callout-body">
            <p>Make subscription billing painless with built-in Stripe and Braintree integrations. Coupons, swapping subscriptions, cancellations, and even PDF invoices are ready out of the box.</p>
          </div>
        </a>
      </div>

    </div>
  </section>
  <section class="panel dark">
    <h1>Our propcess</h1>
    <p class="intro">hello</p>
  </section>
@endsection

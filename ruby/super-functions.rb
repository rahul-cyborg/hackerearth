def superphis(n)
  count = 0
  (1..n).each do |j|
    count += 1 if j.gcd(n) == 1
  end
  count
end
test_cases = gets.chomp.strip.to_i
out = []

test_cases.times do
  arr = gets.chomp.strip.split(' ')
  q = arr[0].to_i
  n = arr[1].to_i
  sum = 0
  if q == 1
    (1..n).each do |i|
      tmp = (n**i) * (i.gcd(n))
      sum += tmp
    end
    out << sum % 1000000007
  elsif q == 2
     (1..n).each do |i|
      num = n + i
      sum += (2**num) * (i.gcd(n))
     end
     out << sum % 1000000007
  else
    (1..n).each do |i|
      sum += superphis(n**i) * (i.gcd(n))
    end
    out << sum % 1000000007
  end
    
end

puts out
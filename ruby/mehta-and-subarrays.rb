test_cases = gets.chomp.strip.to_i
arr = gets.chomp.strip.split(' ').map(&:to_i)

result = []

(0...arr.length).each do |i|
  sum = 0
  (i...arr.length).each do |j|
    sum += arr[j]
    if sum >= 0
      result << j - i + 1
    end
  end
end

if result.length == 0
  puts '-1'
else
  mx = result.max
  count = result.count(mx)
  puts mx.to_s + ' ' + count.to_s
end